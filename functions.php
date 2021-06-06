<?php

    function init_func(){
        add_theme_support("title-tag");
        add_theme_support("post-thumbnails");

        // カスタムポスト（投稿タイプ）　配列[]の前のworksはURLになる
        //"labels"は管理画面の表示に関する
        register_post_type("works",[
            "labels" => [
                "name" => "制作物",  //複数刑、単数形の違い（英語圏用）
                "singular_name"=> "制作物",
                "add_new"=> "制作物を追加",
                "add_new_item"=> "制作物を追加",
                "edit_item"=> "制作物を編集",
                "new_item"=> "新しい制作物",
                "all_items"=> "すべての制作物",
                "view_item"=> "制作物をみる",
                "search_items"=> "制作物を探す",
                "not_found"=> "制作物はみつかりませんでした",
                "not_found_in_trash"=> "ゴミ箱はからです",
                "parent_item_colon"=> "",
                "menu_name"=> "制作物",

            ],
            "public"=> true, //この投稿タイプをメニューから使えるように公開する
            "has_archive" => true,//一覧ページをもつか
            "hierarchical" => false,  //継承trueにすると親を設定できるようになる(階層構造が可能になる）
            "supports" => [
                "title",
                "editor",
                "page-attributes"
            ],
            "menu_position" => 5,//数字を大きくするとメニューの表示位置を下げることができる
            "menu_icon" =>"dashicons-images-alt2" //Dashiconsで検索！

        ]);





    }

    add_action("init", "init_func");


?>