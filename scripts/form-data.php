if ( isset( $_POST['submit'] ) ) {

  $firstname = $_REQUEST['name'][0];
  $lastname = $_REQUEST['name'][1];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $message = $_REQUEST['message'];
  

  echo '{$firstname . '/n' . $lastname . '/n' . $email . '/n' . $phone . '/n' . $message}'
  
}