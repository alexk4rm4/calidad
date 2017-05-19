<?php

# Seguridad
defined('INDEX_DIR') OR exit('Ocrend software says .i.');

//------------------------------------------------

final class Login extends Models implements OCREND {

  private $user;
  private $session = null;
  private $u;

  public function __construct() {
    parent::__construct();
  }

  # Control de errores
  final private function errors(array $data) {
    try {
      Helper::load('strings');
      $this->user = $this->db->scape($data['user']);
      $this->u = $this->db->select('id,pass,object','users',"user='$this->user'",'LIMIT 1');
      if(false == $this->u or Strings::desencriptar($this->u[0][1]) != $data['pass']) {
        throw new Exception('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error:</strong> Credenciales incorrectas.</div>');
      }

      if(DB_SESSION) {
        $this->session = new Sessions;
        if($this->session->session_in_use($this->u[0][0])) {
          throw new Exception('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error:</strong> Ya tiene una sesión iniciada.</div>');
        }
      }
      
      return false;
    } catch (Exception $e) {
      return array('success' => 0, 'message' => $e->getMessage());
    }
  }

  # Control de errores en la auntetificacion
  final private function errorsAuth(array $data) {
    try {
      Helper::load('strings');
      $this->user = $this->db->scape($data['userAuth'.$data['var']]);
      # Carro (var1 = Npuertas, var2 = ventanas, var3 = Color carro, var4 = ruedas) 
      # casa (var1 = pisos, var2 = ventanas, var3 = Color carro, var4 = puerta) 
      $this->u = $this->db->select('id','users',"user='$this->user' AND var1='".$data['npuertaAuth'.$data['var']]."' AND var2='".$data['ventanasAuth'.$data['var']]."' AND var3='".$data['colorobjetoAuth'.$data['var']]."' AND var4='".$data['ruedasAuth'.$data['var']]."'" ,'LIMIT 1');

      if(false == $this->u) {
        throw new Exception('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error:</strong> Los datos no son correctos.</div>');
      }

      if(DB_SESSION) {
        $this->session = new Sessions;
        if($this->session->session_in_use($this->u[0][0])) {
          throw new Exception('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Error:</strong> Ya tiene una sesión iniciada.</div>');
        }
      }
      
      return false;
    } catch (Exception $e) {
      return array('success' => 0, 'message' => $e->getMessage());
    }
  }

  # Inicio de sesión
  final public function SignIn(array $data) : array {
    $error = $this->errors($data);
    if(!is_bool($error)) {
      return $error;
    }
    
    return array('success' => 1, 'message' => '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Autentificación:</strong> Por objeto cargando...</div>', 'objeto' => $this->u[0][2]);
  }

  # Inicio de autentificacion
  final public function SignAuth(array $data) : array {
    $error = $this->errorsAuth($data);
    if(!is_bool($error)) {
      return $error;
    }

    if(DB_SESSION) {
      $this->session->generate_session($this->u[0][0]);
    } else {
      $_SESSION[SESS_APP_ID] = $this->u[0][0];
    }

    return array('success' => 1, 'message' => '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Éxito:</strong> Redireccionando...</div>');
  }

  public function __destruct() {
    parent::__destruct();
  }

}

?>
