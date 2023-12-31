<?php

	function readableBytes($bytes)

	{

		$i = floor(log($bytes) / log(1024));

		$sizes = array("B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB");

		return sprintf("%.02F", $bytes / pow(1024, $i)) * 1 . " " . $sizes[$i];

	};

	require_once("../functions/presets.php");

	require_once("../functions/authentication.php");

	if ($use_databases_encryption != "true")

	{

		$chat_database_files = json_decode(base64_decode(file_get_contents($databases_files_path), true), true);

	}

	else

	{

		$chat_database_files = json_decode(base64_decode(openssl_decrypt(file_get_contents($databases_files_path), $encryption_cipher, $salt_global.$databases_password.$salt_files, $encryption_options, $encryption_iv), true), true);

	};

	$total_files = count($chat_database_files);

	$upload_max_filesize = ini_get("upload_max_filesize")*1048576;

	$readable_max_file_size = ini_get("upload_max_filesize");

	require_once("../templates/attachments.html");

	for ($i = $total_files-1; $i >= 0; $i--)

	{

		$decoded_time = base64_decode($chat_database_files[$i][time]);

		$decoded_date = base64_decode($chat_database_files[$i][date]);

		$decoded_nickname = base64_decode($chat_database_files[$i][nickname]);

		$decoded_device = base64_decode($chat_database_files[$i][device]);

		$decoded_name = base64_decode($chat_database_files[$i][filename]);

		$decoded_filesize = base64_decode($chat_database_files[$i][filesize]);

		$decoded_filetype = base64_decode($chat_database_files[$i][filetype]);

		$decoded_address = base64_decode($chat_database_files[$i][address]);

		$validated_time = preg_replace($validationRegexp, $validationReplacement, $decoded_time);

		$validated_date = preg_replace($validationRegexp, $validationReplacement, $decoded_date);

		$validated_nickname = preg_replace($validationRegexp, $validationReplacement, $decoded_nickname);

		$validated_device = preg_replace($validationRegexp, $validationReplacement, $decoded_device);

		$validated_name = preg_replace($validationRegexp, $validationReplacement, $decoded_name);

		$validated_filesize = preg_replace($validationRegexp, $validationReplacement, $decoded_filesize);

		$validated_filetype = preg_replace($validationRegexp, $validationReplacement, $decoded_filetype);

		$validated_address = preg_replace($validationRegexp, $validationReplacement, $decoded_address);

		if ($validated_time != "" && $validated_time != null && $validated_date != "" && $validated_date != null && $validated_nickname != "" && $validated_nickname != null && $validated_device != "" && $validated_device != null && $validated_name != "" && $validated_name != null && $validated_filesize != "" && $validated_filesize != null && $validated_filetype != "" && $validated_filetype != null && $validated_address != "" && $validated_address != null)

		{

			$timedate = "<strong> Added: </strong>" . "<br>" . date($time_files_format_short, strtotime($validated_time)) . "<br>" . date($date_files_format_short, strtotime($validated_date));

			$name = "<strong>" . "<xmp class='list'>" . $validated_name . "</xmp>" . "</strong>";

			$info = "<strong> Filesize: </strong>" . readableBytes($validated_filesize) . " <br> " . " <strong> Filetype: </strong>" . $validated_filetype;

			$view = "../functions/view.php?id=$i";

			$link = "../functions/download.php?id=$i";

			require("../templates/attachments_list.html");

		};

	};

?>
