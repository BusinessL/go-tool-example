package main

import (
	"context"
	"log"
	"net"

	pb "../../Proto/services/hello"

	"google.golang.org/grpc"
)

const (
	port = ":9502"
)

type server struct {
	pb.UnimplementedHelloServer
}

func (s *server) SayHello(ctx context.Context, in *pb.HelloRequest) (*pb.HelloResponse, error) {
	log.Printf("Received: %v", in.GetUsername())
	return &pb.HelloResponse{Code: 200, Message: "Hello " + in.GetUsername()}, nil
}

func main() {
	lis, err := net.Listen("tcp", port)
	if err != nil {
		log.Fatalf("failed to listen: %v", err)
	}
	s := grpc.NewServer()
	pb.RegisterHelloServer(s, &server{})
	log.Printf("服务启动" + port)
	if err := s.Serve(lis); err != nil {
		log.Fatalf("failed to serve: %v", err)
	}
}
