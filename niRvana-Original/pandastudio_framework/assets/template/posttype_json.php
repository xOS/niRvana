<?php error_reporting(E_ALL^E_NOTICE);define('OOO00O0', 'OOO000O');$_GET[OOO00O0] = explode('|@|7|+', 'posttypes|@|7|+init|@|7|+type|@|7|+labels|@|7|+name|@|7|+singular_name|@|7|+|@|7|+add_new|@|7|+添加|@|7|+add_new_item|@|7|+edit|@|7|+编辑|@|7|+edit_item|@|7|+new_item|@|7|+新|@|7|+view|@|7|+查看|@|7|+view_item|@|7|+search_items|@|7|+搜索|@|7|+not_found|@|7|+未找到|@|7|+not_found_in_trash|@|7|+回收站未找到|@|7|+parent|@|7|+父分类|@|7|+public|@|7|+menu_position|@|7|+supports|@|7|+show_in_rest|@|7|+taxonomies|@|7|+menu_icon|@|7|+has_archive|@|7|+manage_|@|7|+_posts_columns|@|7|+unset_columns|@|7|+new_columns|@|7|+display|@|7|+tags|@|7|+date|@|7|+allow_categorys|@|7|+-category|@|7|+分类目录|@|7|+添加新分类目录|@|7|+new_item_name|@|7|+分类名称|@|7|+show_ui|@|7|+show_tagcloud|@|7|+hierarchical|@|7|+allow_tags|@|7|+-tag|@|7|+标签|@|7|+添加新标签|@|7|+标签名称|@|7|+custom_taxonomies|@|7|+taxonomy|@|7|+label_name|@|7|+label_add_new_item|@|7|+label_new_item_name|@|7|+columns|@|7|+meta|@|7|+eval|@|7|+picture|@|7|+<div style="width:80px;height:80px;border-radius:4px;background:url(|@|7|+) no-repeat center center / cover"></div>|@|7|+href|@|7|+<a href="|@|7|+" target="_blank">|@|7|+</a>|@|7|+the_tags|@|7|+、|@|7|+tag|@|7|+manage_posts_custom_column|@|7|+custom_columns');
foreach($myPostTypes[$_GET{OOO00O0}{0}] as $postType){add_action($_GET{OOO00O0}[0x001],function()use($postType){$OOO00OO=&$_GET{OOO00O0};register_post_type($postType[$OOO00OO{0x0002}],array($OOO00OO[0x00003] =>array($OOO00OO{0x000004} =>$postType[$OOO00OO{0x000004}],$OOO00OO[0x05] =>$OOO00OO{0x006}.$postType[$OOO00OO{0x000004}],$OOO00OO[0x0007] =>$OOO00OO{0x00008}.$postType[$OOO00OO{0x000004}],$OOO00OO[0x000009] =>$OOO00OO{0x00008}.$postType[$OOO00OO{0x000004}],$OOO00OO{0x0a} =>$OOO00OO[0x00b],$OOO00OO{0x000c} =>$OOO00OO[0x00b].$postType[$OOO00OO{0x000004}],$OOO00OO[0x0000d] =>$OOO00OO{0x00000e}.$postType[$OOO00OO{0x000004}],$OOO00OO[0x0f] =>$OOO00OO{0x0010},$OOO00OO[0x00011] =>$OOO00OO{0x0010}.$postType[$OOO00OO{0x000004}],$OOO00OO{0x000012} =>$OOO00OO[0x0000013].$postType[$OOO00OO{0x000004}],$OOO00OO{0x014} =>$OOO00OO[0x0015].$postType[$OOO00OO{0x000004}],$OOO00OO{0x00016} =>$OOO00OO[0x000017].$postType[$OOO00OO{0x000004}],$OOO00OO{0x0000018} =>$postType[$OOO00OO{0x000004}].$OOO00OO[0x019]),$OOO00OO{0x001a} =>!0,$OOO00OO[0x0001b] =>0x0024,$OOO00OO{0x00001c} =>$postType[$OOO00OO{0x00001c}],$OOO00OO[0x000001d] =>$postType[$OOO00OO[0x000001d]],$OOO00OO{0x01e} =>array(),$OOO00OO[0x001f] =>$postType[$OOO00OO[0x001f]],$OOO00OO{0x00020} =>!0));});add_filter($_GET{OOO00O0}[0x000021].$postType[$_GET{OOO00O0}{0x0002}].$_GET{OOO00O0}{0x0000022},function($OOO0O00)use($postType){$OOOO0O0=&$_GET{OOO00O0};foreach($postType[$OOOO0O0[0x023]] as $OOO0O0O){unset($OOO0O00[$OOO0O0O]);}$OOO0OO0=array();foreach($postType[$OOOO0O0{0x0024}] as $OOO0OOO){$OOO0OO0[$OOO0OOO[$OOOO0O0{0x000004}]]=$OOO0OOO[$OOOO0O0[0x00025]];}$OOO0O00=array_merge($OOO0O00,$OOO0OO0);if($OOO0O00[$OOOO0O0{0x000026}]){$OOOO000=$OOO0O00[$OOOO0O0{0x000026}];unset($OOO0O00[$OOOO0O0{0x000026}]);$OOO0O00=array_merge($OOO0O00,$OOO0OO0,array($OOOO0O0{0x000026}=>$OOOO000));}if($OOO0O00[$OOOO0O0[0x0000027]]){$OOOO00O=$OOO0O00[$OOOO0O0[0x0000027]];unset($OOO0O00[$OOOO0O0[0x0000027]]);$OOO0O00=array_merge($OOO0O00,$OOO0OO0,array($OOOO0O0[0x0000027]=>$OOOO00O));}return $OOO0O00;});if($postType[$_GET{OOO00O0}{0x028}]){add_action($_GET{OOO00O0}[0x001],function()use($postType){$OOOO0OO=&$_GET{OOO00O0};register_taxonomy($postType[$OOOO0OO{0x0002}].$OOOO0OO[0x0029],$postType[$OOOO0OO{0x0002}],array($OOOO0OO[0x00003] =>array($OOOO0OO{0x000004} =>$postType[$OOOO0OO{0x000004}].$OOOO0OO{0x0002a},$OOOO0OO[0x000009] =>$OOOO0OO[0x00002b],$OOOO0OO{0x000002c} =>$OOOO0OO[0x02d]),$OOOO0OO{0x002e} =>!0,$OOOO0OO[0x000001d] =>!0,$OOOO0OO[0x0002f] =>!1,$OOOO0OO{0x000030} =>!0,));});}if($postType[$_GET{OOO00O0}[0x0000031]]){add_action($_GET{OOO00O0}[0x001],function()use($postType){$OOOOO00=&$_GET{OOO00O0};register_taxonomy($postType[$OOOOO00{0x0002}].$OOOOO00{0x032},$postType[$OOOOO00{0x0002}],array($OOOOO00[0x00003] =>array($OOOOO00{0x000004} =>$postType[$OOOOO00{0x000004}].$OOOOO00[0x0033],$OOOOO00[0x000009] =>$OOOOO00{0x00034},$OOOOO00{0x000002c} =>$OOOOO00[0x000035]),$OOOOO00{0x002e} =>!0,$OOOOO00[0x000001d] =>!0,$OOOOO00[0x0002f] =>!0,$OOOOO00{0x000030} =>!1,));});}if($postType[$_GET{OOO00O0}{0x0000036}]){foreach($postType[$_GET{OOO00O0}{0x0000036}] as $item){add_action($_GET{OOO00O0}[0x001],function()use($postType,$item){$OOOOO0O=&$_GET{OOO00O0};register_taxonomy($item[$OOOOO0O[0x037]],$postType[$OOOOO0O{0x0002}],array($OOOOO0O[0x00003] =>array($OOOOO0O{0x000004} =>$item[$OOOOO0O{0x0038}],$OOOOO0O[0x000009] =>$item[$OOOOO0O[0x00039]],$OOOOO0O{0x000002c} =>$item[$OOOOO0O{0x00003a}]),$OOOOO0O{0x002e} =>$item[$OOOOO0O{0x002e}],$OOOOO0O[0x000001d] =>!0,$OOOOO0O[0x0002f] =>$item[$OOOOO0O[0x0002f]],$OOOOO0O{0x000030} =>$item[$OOOOO0O{0x000030}],));});}}};function custom_columns($OOOOOO0,$OOOOOOO){$O0000OO0=&$_GET{OOO00O0};global$myPostTypes;$O0000000=array();foreach($myPostTypes[$O0000OO0[0x000003b]] as $O000000O){$O0000000[$O000000O[$O0000OO0{0x000004}]]=array($O0000OO0[0x00025] =>$O000000O[$O0000OO0[0x00025]],$O0000OO0{0x03c} =>$O000000O[$O0000OO0{0x03c}],$O0000OO0[0x003d] =>$O000000O[$O0000OO0[0x003d]],);}$O00000O0=get_post_meta($OOOOOOO,$O0000000[$OOOOOO0][$O0000OO0{0x03c}],!0);switch($O0000000[$OOOOOO0][$O0000OO0[0x00025]]){case $O0000OO0{0x03c}:echo $O00000O0;break;case $O0000OO0{0x0003e}:echo $O0000OO0[0x00003f].$O00000O0.$O0000OO0{0x0000040};break;case $O0000OO0[0x041]:echo $O0000OO0{0x0042}.$O00000O0.$O0000OO0[0x00043].$O00000O0.$O0000OO0{0x000044};break;case $O0000OO0[0x037]:$O00000OO=get_post($OOOOOOO);$O0000O00=$O00000OO->post_type;if(get_the_term_list($O00000OO->ID,$O0000O00.$O0000OO0[0x0029])){$O0000O0O=apply_filters($O0000OO0[0x0000045],get_the_term_list($O00000OO->ID,$O0000O00.$O0000OO0[0x0029],$O0000OO0{0x006},$O0000OO0{0x046},$O0000OO0{0x006}),$O0000OO0{0x006},$O0000OO0{0x046},$O0000OO0{0x006},$O00000OO->ID);if(!is_wp_error($O0000O0O)){echo $O0000O0O;}}break;case $O0000OO0[0x0047]:$O00000OO=get_post($OOOOOOO);$O0000O00=$O00000OO->post_type;if(get_the_term_list($O00000OO->ID,$O0000O00.$O0000OO0{0x032})){$O0000O0O=apply_filters($O0000OO0[0x0000045],get_the_term_list($O00000OO->ID,$O0000O00.$O0000OO0{0x032},$O0000OO0{0x006},$O0000OO0{0x046},$O0000OO0{0x006}),$O0000OO0{0x006},$O0000OO0{0x046},$O0000OO0{0x006},$O00000OO->ID);if(!is_wp_error($O0000O0O)){echo $O0000O0O;}}break;case $O0000OO0[0x003d]:eval($O0000000[$OOOOOO0][$O0000OO0[0x003d]]);break;default:}}add_action($_GET{OOO00O0}{0x00048},$_GET{OOO00O0}[0x000049],0x0a,0x0002);?>