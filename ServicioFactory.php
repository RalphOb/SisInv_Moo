<?php
// Factory de servivios
abstract class ServicioFactory
{
    abstract function createService($type);

    public function orderService($type)
    {
        $service = $this->createService($type);
        $service->make();
        $service->search();
        $service->prepare();
        $service->deliver();
        return $service;
    }
}

?>

<!--busca-->
<!--prepara-->
<!--entrega-->
