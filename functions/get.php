<?php

	function send_messages_database($use_databases_encryption, $time_messages_format, $custom_time_set, $date_messages_format, $custom_date_set, $recieve_client_password, $client_password_to_send_database, $PASSWORD, $databases_messages_path, $encryption_cipher, $salt_global, $databases_password, $salt_messages, $encryption_options, $encryption_iv)

	{

		if ($recieve_client_password == "true")

		{

			if ($PASSWORD == $client_password_to_send_database)

			{

				if ($use_databases_encryption != "true")

				{

					$chat_database = file_get_contents($databases_messages_path);

				}

				else

				{

					$chat_database = openssl_decrypt(file_get_contents($databases_messages_path), $encryption_cipher, $salt_global.$databases_password.$salt_messages, $encryption_options, $encryption_iv);

				};

			}

			else

			{

				$time = base64_encode(date($time_messages_format, strtotime($custom_time_set)));

				$date = base64_encode(date($date_messages_format, strtotime($custom_date_set)));

				$device = base64_encode("Server");

				$nickname = base64_encode("System");

				$message = base64_encode("Authentication error!");

				$address = base64_encode("Notify");

				$content = array("time" => $time, "date" => $date, "device" => $device, "nickname" => $nickname, "message" => $message, "address" => $address);

				$message = array("0" => $content);

				$chat_database = base64_encode(json_encode($message, JSON_PRETTY_PRINT));

			};

		}

		else

		{

			if ($use_databases_encryption != "true")

			{

				$chat_database = file_get_contents($databases_messages_path);

			}

			else

			{

				$chat_database = openssl_decrypt(file_get_contents($databases_messages_path), $encryption_cipher, $salt_global.$databases_password.$salt_messages, $encryption_options, $encryption_iv);

			};

		};

		return $chat_database;

	};

	function send_users_database($use_databases_encryption, $recieve_client_password, $client_password_to_send_database, $PASSWORD, $databases_users_path, $encryption_cipher, $salt_global, $databases_password, $salt_users, $encryption_options, $encryption_iv)

	{

		if ($recieve_client_password == "true")

		{

			if ($PASSWORD == $client_password_to_send_database)

			{

				if ($use_databases_encryption != "true")

				{

					$users_database = file_get_contents($databases_users_path);

				}

				else

				{

					$users_database = openssl_decrypt(file_get_contents($databases_users_path), $encryption_cipher, $salt_global.$databases_password.$salt_users, $encryption_options, $encryption_iv);

				};

			}

			else

			{

				echo "DENIED";

			};

		}

		else

		{

			if ($use_databases_encryption != "true")

			{

				$users_database = file_get_contents($databases_users_path);

			}

			else

			{

				$users_database = openssl_decrypt(file_get_contents($databases_users_path), $encryption_cipher, $salt_global.$databases_password.$salt_users, $encryption_options, $encryption_iv);

			};

		};

		if (!isset($users_database))

		{

			echo "DENIED";

		}

		else

		{

			$decoded = json_decode(base64_decode($users_database), true);

			$decoded_count = count($decoded);

			echo "<br> TOTAL : ".$decoded_count."<br>";

			for ($i = 0; $i < $decoded_count; $i++)

			{

				$reencoded_users[$i][login] = base64_decode($decoded[$i][login]);

				echo "<br>".$i." : ".$reencoded_users[$i][login];

			};

		};

	};

	require_once("../functions/presets.php");

	require_once("../functions/authentication.php");

	header("Cache-Control: no-store, no-cache, must-revalidate");

	$TYPE = $_GET["type"];

	$PASSWORD = $_GET["password"];

	switch ($TYPE)

	{

		case "messages":

			echo send_messages_database($use_databases_encryption, $time_messages_format, $custom_time_set, $date_messages_format, $custom_date_set, $recieve_client_password, $client_password_to_send_database, $PASSWORD, $databases_messages_path, $encryption_cipher, $salt_global, $databases_password, $salt_messages, $encryption_options, $encryption_iv);

			break;

		case "users":

			echo send_users_database($use_databases_encryption, $recieve_client_password, $client_password_to_send_database, $PASSWORD, $databases_users_path, $encryption_cipher, $salt_global, $databases_password, $salt_users, $encryption_options, $encryption_iv);

			break;

		case "files":

			echo file_get_contents($databases_files_path);

			break;

		case "audio":

			echo file_get_contents($audio_notify_path);

			break;

		case "address":

			echo $address;

			break;

		default:

			break;

	};

?>
