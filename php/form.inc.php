<?php
#****************************************************************************************#


				/**
				*
				*	Entschärft und säubert einen String
				*
				*	@param String $value 	- Der zu entschärfende und zu bereinigende String
				*
				*	@return String 			- Der entschärfte und bereinigte String, bei Leerstring NULL
				*
				*/

				function cleanString($value) {
					
					// htmlspecialchars() entschärft HTML-Steuerzeichen wie < > & ""
					// und ersetzt sie durch &lt;, &gt;, &amp;, &quot;
					// ENT_QUOTES | ENT_HTML5 ersetzt zusätzlich '' durch &apos;
					$value = htmlspecialchars($value, ENT_QUOTES | ENT_HTML5);
					
					// trim() entfernt am Anfang und am Ende eines Strings alle 
					// sog. Whitespaces (Leerzeichen, Tabulatoren, Zeilenumbrüche)
					$value = trim($value);
					
					// Damit cleanString() nicht NULL-Werte in Leerstings verändert, wird 
					// geprüft, ob $value überhaupt einen gültigen Wert besitzt
					if(!$value){
					
						$value=NULL;					
					}
					return $value;					
				}


#****************************************************************************************#

				
				/**
				*
				*	Prüft einen String auf Leerstring, Mindest- und Maxmimallänge
				*
				*	@param String $value 									- Der zu prüfende String
				*	@param [Integer $minLength=INPUT_MIN_LENGTH] 	- Die erforderliche Mindestlänge
				*	@param [Integer $maxLength=INPUT_MAX_LENGTH] 	- Die erlaubte Maximallänge
				*
				*	@return String/NULL - Ein String bei Fehler, ansonsten NULL
				*	
				*/
				function checkInputString($value, $minLength=INPUT_MIN_LENGTH, $maxLength=INPUT_MAX_LENGTH) {
					
					$errorMessage = NULL;
					
					// Prüfen auf leeres Feld
					if( !$value ) {
						$errorMessage = "Это обязательное поле!";
					
					// Prüfen auf Mindestlänge
					} elseif( mb_strlen($value) < $minLength ) {
						$errorMessage = "Должно быть не менее $minLength символов.!";
					
					// Prüfen auf Maximallänge
					} elseif( mb_strlen($value) > $maxLength ) {
						$errorMessage = "Может содержать не более $maxLength символов!";						
					}
					
					return $errorMessage;
				}


#****************************************************************************************#


				/**
				*
				*	Prüft eine Email-Adresse auf Leerstring und Validität
				*
				*	@param String $value 	- Die zu prüfende Email-Adresse
				*
				*	@return String/NULL 		- Ein String bei Fehler, ansonsten NULL
				*
				*/
				function checkEmail($value) {

					$value = filter_var($value, FILTER_SANITIZE_EMAIL);
					
					$errorMessage = NULL;
					
					// Prüfen auf leeres Feld
					if( !$value ) {
						$errorMessage = "Обязательное для заполнения поле!";
					
					// Email auf Validität prüfen
					} elseif( !filter_var($value, FILTER_VALIDATE_EMAIL) ) {
						$errorMessage = "Aдрес электронной почты недействительный!";
					}
					
					return $errorMessage;
				}		


?>