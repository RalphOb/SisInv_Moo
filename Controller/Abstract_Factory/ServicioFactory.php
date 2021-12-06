<?php
// Factory de servivios
abstract class ServicioFactory
{
    abstract function createService($type);

    public function orderService($type)
    {
        $service = $this->createService($type);
        $service->prod1();
        $service->prod2();
        $service->prod3();
        $service->prod4();
        return $service;
    }
}
?>
