# 服务端
### 技术栈
> swoole

### 前提
生成proto配套代码
- PHP
> protoc --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=/plugin/grpc_php_plugin hello.proto

- Golang
> protoc --go_out=plugins=grpc:. hello.proto


### 说明
- 使用swoole接收grpc请求，并返回数据。使用swoole而不是golang，是因为我想说明，grpc就是个通信协议。