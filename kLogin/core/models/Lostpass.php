<?php

# Seguridad
defined('INDEX_DIR') OR exit('Ocrend software says .i.');

//------------------------------------------------

final class Lostpass extends Models implements OCREND {

	public function __construct() {
		parent::__construct();
	}

	# Envía el correo
	final public function RepairPass(array $data) : array {
		try {
			$objeto;
			$mail = $this->db->scape($data['email']);
			$user = $this->db->select('id,user,pass,object,var1,var2,var3,var4','users',"email='$mail'",'LIMIT 1');
			if($user[0]['object'] == 1){
				$var2 = 'Color de las ventanas: ';
				$var3 = 'Color del auto: ';
				$var4 = 'Color de las ruedas: ';
				$objeto = 'Auto';
				switch ($user[0]['var1']) {
					case '1': $var1 = 'Puertas: 2';
						break;
					case '2': $var1 = 'Puertas: 4';
						break;	
					default: $var1 = 'Puertas: No especificado';
						break;
				}
			}else{
				$objeto = 'Casa';
				$var2 = 'Color de las ventanas: ';
				$var3 = 'Color del edificio: ';
				$var4 = 'Color de la puerta: ';
				switch ($user[0]['var1']) {
					case '2': $var1 = 'Pisos: 2';
						break;
					case '3': $var1 = 'Pisos: 3';
						break;	
					case '4': $var1 = 'Pisos: 4';
						break;
					case '5': $var1 = 'Pisos: 5';
						break;	
					default: $var1 = 'Pisos: No especificado';
						break;
				}
			}
			# Filtro
			if(false == $user) {
				return array('success' => 0, 'message' => 'El <b>email</b> introducido no existe.');
			}

			$id = $user[0]['id'];

			$HTML = '
				    <style>
				      .var2 {
				         width: 20px;
				         height: 20px;
				         -moz-border-radius: 50%;
				         -webkit-border-radius: 50%;
				         border-radius: 50%;
				         background: '.$user[0]['var2'].';
				      }
				      .var3 {
				         width: 20px;
				         height: 20px;
				         -moz-border-radius: 50%;
				         -webkit-border-radius: 50%;
				         border-radius: 50%;
				         background: '.$user[0]['var3'].';
				      }
				      .var4 {
				         width: 20px;
				         height: 20px;
				         -moz-border-radius: 50%;
				         -webkit-border-radius: 50%;
				         border-radius: 50%;
				         background: '.$user[0]['var4'].';
				      }
				    </style>
				    <body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
		<tr>
			<td style="padding: 10px 0 30px 0;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
					<tr>
						<td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
							<img src="https://k60.kn3.net/9AF121BCC.png" alt="kLogin" width="535" height="230" style="display: block;" />
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										<b>kLogin</b>
									</td>
								</tr>
								<tr>
									<td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
										Hola <b>'. $user[0]['user'] .'</b>, has solicitado recuperar tu contraseña perdida, tu informacion es la siguiente:

									</td>
								</tr>
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">Contraseña: '.Strings::desencriptar($user[0]['pass']).'</td><td></td>
								</tr>
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">Objeto: '.$objeto.'</td><td></td>
								</tr>
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">'.$var1.' </td><td></td>
								</tr>
								<tr>
								<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">'.$var2.'</td><td><div class="var2"></div></td>
								</tr>
								<tr>
								<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">'.$var3.'</td><td><div class="var3"></div></td>
								</tr>
								<tr>
								<td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">'.$var4.'</td><td><div class="var4"></div></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
										&reg; Universidad Politécnica Salesiana<br/>
										<a href="#" style="color: #ffffff;"><font color="#ffffff">kLogin</font></a> Control de calidad
									</td>
									<td align="right" width="25%">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="http://icons.iconarchive.com/icons/yootheme/social-bookmark/128/social-twitter-box-blue-icon.png" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
													</a>
												</td>
												<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="http://icons.iconarchive.com/icons/yootheme/social-bookmark/128/social-facebook-box-blue-icon.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
													</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>';

			Helper::load('emails');
			$dest[$mail] = $user[0]['user'];
			$email = Emails::send_mail($dest,Emails::plantilla($HTML),'Recuperar contraseña perdida');

			if($email == true) {
				$message = 'Hemos enviado un email a <b>' . $mail . '</b> para recuperar su contraseña.';
				return array('success' => 1, 'message' => $message);
			}
			else{
				return array('success' => 0, 'message' => $email->ErrorInfo);
			}
		} catch (Exception $e) {
			return array('success' => 0, 'message' => $e->getMessage());
		}
	}

	# Actualiza la contraseña
	final public function UpdatePass() {
		$u = $this->db->select('id,keypass_tmp','users',"keypass='$this->id' AND keypass <> '0'",'LIMIT 1');

		if(false != $u) {

			Helper::load('strings');

			$id = $u[0]['id'];
			$pass = $u[0]['keypass_tmp'];
			$hash = Strings::hash($pass);

			$e = array(
				'keypass' => 0,
				'keypass_tmp' => '',
				'pass' => $hash
			);
			$this->db->update('users',$e,"keypass='$this->id' AND keypass <> '0' AND id='$id'");

			return $pass;
		}

		return false;
	}

	public function __destruct() {
		parent::__destruct();
	}
}

?>
