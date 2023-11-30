<?php

/**
 * Plugin Name: kidstoys endpoints
 * Description: API endpoint for kidstoys.
 * Version: 1.0
 * Author: Jeff and Mark.
 */

function get_categories_endpoint() {
    global $wpdb;    
    $categories = $wpdb->get_results("SELECT * FROM categories", OBJECT);
    return rest_ensure_response( $categories );
}

function post_categories_endpoint() {   
    global $wpdb; 
    $categories = $wpdb->get_results("INSERT INTO categories values", OBJECT);
    return rest_ensure_response( $categories );
}
 
function get_products_endpoint() { 
    global $wpdb;   
    $products = $wpdb->get_results("SELECT * FROM products");     
    return rest_ensure_response( $products );
}

function post_product_endpoint(WP_REST_Request $request) { 
    global $wpdb;
    $data = $request->get_json_params();  
    $wpdb->insert("products", array('name' => $data['name'], 'description' => $data['description'], 
    'imagePath' => $data['imagePath'], 'price' => $data['price'], 'categoryId' => $data['categoryId'], 'quantity' => $data['quantity'],
     'created_at' => current_time('mysql', 1), 'updated_at' => current_time('mysql', 1)));  
    $product_id = $wpdb->insert_id;  
    return rest_ensure_response(array('product_id' => $product_id)); 
}

function update_product_endpoint(WP_REST_Request $request) { 
    global $wpdb; 
    $product = $wpdb->update("products", array('name' => $request['name'], 'description' => $request['description'], 
    'imagePath' => $request['imagePath'], 'price' => $request['price'], 'categoryId' => $request['categoryId'], 'quantity' => $request['quantity'],
     'updated_at' => current_time('mysql', 1)), array("id" => $request["id"]));  
    return rest_ensure_response("Succesfully updated product with id: " . $request["id"]);
}

function delete_product_endpoint($data) { 
    global $wpdb; 
    $product = $wpdb->delete("products", array("id" => $data["id"]));  
    return rest_ensure_response("Succesfully deleted product with id: " . $data["id"]);
}
 
function register_custom_endpoints() {
    register_rest_route( 'toys/v2', '/categories/', array(
        'methods' => 'GET',
        'callback' => 'get_categories_endpoint',
    ) );
    register_rest_route( 'toys/v2', '/categories/', array(
        'methods' => 'POST',
        'callback' => 'post_categories_endpoint',
    ) );
 
    register_rest_route( 'toys/v2', '/products/', array(
        'methods' => 'GET',
        'callback' => 'get_products_endpoint',
    ) );
    register_rest_route( 'toys/v2', '/products/', array(
        'methods' => 'POST',
        'callback' => 'post_product_endpoint',
    ) );
    register_rest_route( 'toys/v2', '/products/(?P<id>\d+)', array(
        'methods' => 'DELETE',
        'callback' => 'delete_product_endpoint',
    ) );
    register_rest_route( 'toys/v2', '/products/', array(
        'methods' => 'PUT',
        'callback' => 'update_product_endpoint',
    ) );
}
 
add_action( 'rest_api_init', 'register_custom_endpoints' );

?>