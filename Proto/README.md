# proto
### 技术栈
> proto

### 前提
生成proto配套代码
- PHP
> protoc --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=/plugin/grpc_php_plugin hello.proto

- Golang
> protoc --go_out=plugins=grpc:. hello.proto
