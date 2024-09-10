    public function resumen()
    {
        $resultado = new stdClass();
        $resultado->kbussines = UnysoftModel::getUnidadesHabitacionalesSuma('4020100000', '08');
        $resultado->kbussines->recibido = UnysoftModel::getIngresosRecibidos('4020100000', '08');
        $resultado->kbussines->detalle = UnysoftModel::getPagosFuturos('4020100000', '08');
        $resultado->kbussines->porRecibir = UnysoftModel::obtenerPorRecibirOMeDeben('4020100000', '08');
        $resultado->kbussines->porRecibirDetalle = new stdClass();
        $resultado->kbussines->porRecibirDetalle->promesas = UnysoftModel::obtenerPorRecibirAcuerdosYPromesas('4020100000', '08');
        $resultado->kbussines->porRecibirDetalle->cheques = UnysoftModel::obtenerPorRecibirCheques('4020100000','08');
        $resultado->kbussines->porRecibirDetalle->hipotecas = UnysoftModel::obtenerPorRecibirHipotecariosValesVista('4020100000','08');
        $resultado->kbussines->deuda = UnysoftModel::getAllDeudas('4020100000', '08');

        $resultado->life = UnysoftModel::getUnidadesHabitacionalesSuma('4030100000', '08');
        $resultado->life->recibido = UnysoftModel::getIngresosRecibidos('4030100000', '08');
        $resultado->life->detalle = UnysoftModel::getPagosFuturos('4030100000', '08');
        $resultado->life->porRecibir = UnysoftModel::obtenerPorRecibirOMeDeben('4030100000', '08');
        $resultado->life->porRecibirDetalle = new stdClass();
        $resultado->life->porRecibirDetalle->promesas = UnysoftModel::obtenerPorRecibirAcuerdosYPromesas('4030100000', '08');
        $resultado->life->porRecibirDetalle->cheques = UnysoftModel::obtenerPorRecibirCheques('4030100000','08');
        $resultado->life->porRecibirDetalle->hipotecas = UnysoftModel::ObtenerPorRecibirHipotecariosValesVista('4030100000','08');
        $resultado->life->deuda = UnysoftModel::getAllDeudas('4030100000', '08');

        $this->View->renderJSON($resultado);
    }
