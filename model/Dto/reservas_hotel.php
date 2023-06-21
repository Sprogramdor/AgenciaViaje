<?php

class reservas_hotel
 {
    private $RHotel_id;
    private $Rreserva_FK;
    private $hotel_fk;

    // Setter para RHotel_id
    public function setRHotelId($hotelId) {
        $this->RHotel_id = $hotelId;
    }

    // Getter para RHotel_id
    public function getRHotelId() {
        return $this->RHotel_id;
    }

    // Setter para Rreserva_FK
    public function setRreservaFK($reservaFK) {
        $this->Rreserva_FK = $reservaFK;
    }

    // Getter para Rreserva_FK
    public function getRreservaFK() {
        return $this->Rreserva_FK;
    }

    // Setter para hotel_fk
    public function setHotelFK($hotelFK) {
        $this->hotel_fk = $hotelFK;
    }

    // Getter para hotel_fk
    public function getHotelFK() {
        return $this->hotel_fk;
    }
}

  
    