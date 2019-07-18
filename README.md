# jwt
PHP生成、验证JWT

### 使用说明
#### 生成JWT
~~~
 use Jwt\GuoJwt;
 $jwt=new GuoJwt($key);  #key 可动态设置，有默认值
 $payload=array('sub'=>'1234567890','name'=>'Guo','iat'=>1516239022);
 $token=$jwt->getToken($payload);
 ~~~
 #### 验证JWT合法性
 ~~~
 $jwt2=new GuoJwt($key);
 $getPayload=$jwt2->verifyToken($token);
 var_dump($getPayload);
 ~~~
 
