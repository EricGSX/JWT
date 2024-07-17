# JWT
JWT（JSON Web Token）是一种开放标准（RFC 7519），定义了一种紧凑且自包含的方式，用于在各方之间安全地传输信息作为 JSON 对象。JWT 可以在用户和服务之间传递声明，这些声明可以被验证和信任。JWT 可以被用于身份验证（authentication）和信息交换（information exchange）。

一个 JWT 由三部分组成，它们通过点号 . 分隔开来：

Header（头部）：包含了关于生成的 JWT 的元数据，比如令牌的类型（即 JWT）、所使用的加密算法等。
Payload（载荷）：包含了声明（claims），是关于实体（通常是用户）和其他数据的信息。
Signature（签名）：使用指定的算法对头部、载荷进行签名，确保 JWT 没有被篡改。

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
 
 这里需要引入一下，否则会报错class不存在
 ~~~
         "files": [
             "vendor/gsx/jwt-php/autoload.php"
         ]
 ~~~
