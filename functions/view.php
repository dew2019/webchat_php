<?php

	function readableBytes($bytes)

	{

		$i = floor(log($bytes) / log(1024));

		$sizes = array("B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB");

		return sprintf("%.02F", $bytes / pow(1024, $i)) * 1 . " " . $sizes[$i];

	};

	function view_text_file($filebody)

	{

		echo "<plaintext class='view'>" . file_get_contents($filebody);

	};

	function view_image_file($filebody)

	{

		echo "<a href='$filebody' class='view' target='_blank' title='Turn on fullscreen'> <div class='view' id='contentContainer'> <img class='view' src='$filebody'></img> </div> </a>";

	};

	function view_audio_file($filebody)

	{

		echo "<div class='view' id='contentContainer'> <audio class='view' controls preload src='$filebody'></audio> </div>";

	};

	function view_video_file($filebody)

	{

		echo "<div class='view' id='contentContainer'> <video class='view' controls preload src='$filebody'></video> </div>";

	};

	function view_default_file($filetype, $filebody)

	{

		echo "<div class='view' id='contentContainer'> <embed class='view' type='$filetype' src='$filebody'></embed> </div>";

	};

	require_once("../functions/presets.php");

	require_once("../functions/mobile.php");

	require_once("../functions/authentication.php");

	$GETFILEID = $_GET["id"];

	if ($use_databases_encryption != "true")

	{

		$chat_database_files = json_decode(base64_decode(file_get_contents($databases_files_path), true), true);

	}

	else

	{

		$chat_database_files = json_decode(base64_decode(openssl_decrypt(file_get_contents($databases_files_path), $encryption_cipher, $salt_global.$databases_password.$salt_files, $encryption_options, $encryption_iv), true), true);

	};

	$filename = base64_decode($chat_database_files[$GETFILEID][filename]);

	$filetype = base64_decode($chat_database_files[$GETFILEID][filetype]);

	$filesize = base64_decode($chat_database_files[$GETFILEID][filesize]);

	$filebody = base64_decode($chat_database_files[$GETFILEID][filebody]);

	$time = base64_decode($chat_database_files[$GETFILEID][time]);

	$date = base64_decode($chat_database_files[$GETFILEID][date]);

	$filetype_parent = explode("/", $filetype)[0];

	$filesize_readable = readableBytes($filesize);

	require_once("../templates/view.html");

	switch ($filetype_parent)

	{

		case "text":

			view_text_file($filebody);

			break;

		case "image":

			view_image_file($filebody);

			break;

		case "audio":
		case "music":

			view_audio_file($filebody);

			break;

		case "video":

			view_video_file($filebody);

			break;

		default:

			view_default_file($filetype, $filebody);

			break;

	};

?>
