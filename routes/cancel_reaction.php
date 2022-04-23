<?php 
session_start();
require '../config/database.php';
require '../includes/functions.php';
extract($_POST);

if(already_validate($reaction_id)){
 
	$q =$db-> prepare(
		               'DELETE  FROM reaction_like
		               WHERE user_id= :user_id AND forum_id= :forum_id AND reaction_id= :reaction_id AND type= :type');

	$q->execute([
		'user_id'=>get_session('user_id'),
		'forum_id'=>get_session('fr_i'),
		'reaction_id'=>$reaction_id,
		'type'=>"valide"
	]);
    

    $q->closecursor();
}
echo display_validations($reaction_id);