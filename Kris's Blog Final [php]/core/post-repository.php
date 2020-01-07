<?php

$filename = __DIR__ . DIRECTORY_SEPARATOR . 'post.json';

function getAllPosts(){
    global $filename;
    $rawData = file_get_contents($filename);
    $items = json_decode($rawData, true);
    return $items;
    }


function writePostToFile($title, $content, $tag){
        $items = getAllPosts();
        $items[] = array("title" => $title, "content" => $content, "tag" => $tag);
        file_put_contents($filename, json_encode($items, JSON_UNESCAPED_UNICODE));
}
        function getAllPostsByTag($tag){
        $items = getAllPosts();
        foreach($items as $item){
            foreach($item['tag'] as $single_tag){
                if($single_tag == $tag){
                    $tempPosts[] = $item;
                }
            }
        }
        $items = $tempPosts;
        return $items;
        }


$rawData = file_get_contents($filename);
$items = json_decode($rawData, true);