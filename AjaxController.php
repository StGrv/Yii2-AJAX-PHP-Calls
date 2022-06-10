public function actionRemoveshopdelivery() {
    $id = intval( yii::$app->request->post( 'id' ) );

    $msg = "The delivery session does not exist or the ID is wrong";

    if ( ( isset( $id ) && $id === 1 ) && isset( $_SESSION['delivery'] ) ) {
        unset($_SESSION['delivery']);
        $msg = "Success";
    }

    $result['message'] = $msg;
    return json_encode( $result );
}
