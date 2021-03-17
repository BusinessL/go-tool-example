<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Demo;

/**
 */
class HelloClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Demo\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SayHello(\Demo\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Demo.Hello/SayHello',
        $argument,
        ['\Demo\HelloResponse', 'decode'],
        $metadata, $options);
    }

}
