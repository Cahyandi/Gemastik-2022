<?php 

namespace App\Helpers;

class ApiFormatter {
  // protected static $user = [
  //   'code' => null,
  //   'message' => null,
  //   'data' => null
  // ];

  public static function createApi($code = null, $message = null, $data = null)
  {
    static $user = [
      'code' => null,
      'message' => null,
      'data' => null
    ];

    $user['code'] = $code;
    $user['message'] = $message;
    $user['data'] = $data;

    return response()->json($user, 200);
  }
}

?>