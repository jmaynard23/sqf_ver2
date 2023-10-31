<?php

namespace App\Entity;

use App\Repository\InboundFreightRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InboundFreightRepository::class)]
#[ORM\Table(name: 'inbound_sign_in')]
class InboundFreight
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $check_stamp = null;

    #[ORM\Column(length: 15)]
    private ?string $time_in = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $time_out = null;

    #[ORM\Column(length: 255)]
    private ?string $visitor_name = null;

    #[ORM\Column(length: 255)]
    private ?string $carrier = null;

    #[ORM\Column(length: 255)]
    private ?string $trailer_plate = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $load_type_frozen = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $load_type_refrige = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $load_type_ambient = null;

    #[ORM\Column(nullable: true)]
    private ?int $refer_zone1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $refer_zone2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $refer_zone3 = null;

    #[ORM\Column(nullable: true)]
    private ?int $temp_zone1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $temp_zone2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $temp_zone3 = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $user_id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $change_log = null;

    #[ORM\Column(length: 15)]
    private ?string $version = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $sqf_ver = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $last_change_dt = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $driver_phone = null;

    public function getId(): ?int
    {
        return $this->_id;
    }

    public function setId(string $_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    public function getCheckStamp()
    {
        return $this->check_stamp->format("m-d-Y");
    }

    public function setCheckStamp(\DateTimeInterface $check_stamp): self
    {
        $this->check_stamp = $check_stamp;

        return $this;
    }

    public function getTimeIn(): ?string
    {
        return $this->time_in;
    }

    public function setTimeIn(string $time_in): self
    {
        $this->time_in = $time_in;

        return $this;
    }

    public function getTimeOut(): ?string
    {
        return $this->time_out;
    }

    public function setTimeOut(?string $time_out): self
    {
        $this->time_out = $time_out;

        return $this;
    }

    public function getVisitorName(): ?string
    {
        return $this->visitor_name;
    }

    public function setVisitorName(string $visitor_name): self
    {
        $this->visitor_name = $visitor_name;

        return $this;
    }

    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    public function setCarrier(string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function getTrailerPlate(): ?string
    {
        return $this->trailer_plate;
    }

    public function setTrailerPlate(string $trailer_plate): self
    {
        $this->trailer_plate = $trailer_plate;

        return $this;
    }

    public function getLoadTypeFrozen(): ?int
    {
        return $this->load_type_frozen;
    }

    public function setLoadTypeFrozen(int $load_type_frozen): self
    {
        $this->load_type_frozen = $load_type_frozen;

        return $this;
    }

    public function getLoadTypeRefrige(): ?int
    {
        return $this->load_type_refrige;
    }

    public function setLoadTypeRefrige(int $load_type_refrige): self
    {
        $this->load_type_refrige = $load_type_refrige;

        return $this;
    }

    public function getLoadTypeAmbient(): ?int
    {
        return $this->load_type_ambient;
    }

    public function setLoadTypeAmbient(int $load_type_ambient): self
    {
        $this->load_type_ambient = $load_type_ambient;

        return $this;
    }

    public function getReferZone1(): ?int
    {
        return $this->refer_zone1;
    }

    public function setReferZone1(?int $refer_zone1): self
    {
        $this->refer_zone1 = $refer_zone1;

        return $this;
    }

    public function getReferZone2(): ?int
    {
        return $this->refer_zone2;
    }

    public function setReferZone2(?int $refer_zone2): self
    {
        $this->refer_zone2 = $refer_zone2;

        return $this;
    }

    public function getReferZone3(): ?int
    {
        return $this->refer_zone3;
    }

    public function setReferZone3(?int $refer_zone3): self
    {
        $this->refer_zone3 = $refer_zone3;

        return $this;
    }

    public function getTempZone1(): ?int
    {
        return $this->temp_zone1;
    }

    public function setTempZone1(?int $temp_zone1): self
    {
        $this->temp_zone1 = $temp_zone1;

        return $this;
    }

    public function getTempZone2(): ?int
    {
        return $this->temp_zone2;
    }

    public function setTempZone2(?int $temp_zone2): self
    {
        $this->temp_zone2 = $temp_zone2;

        return $this;
    }

    public function getTempZone3(): ?int
    {
        return $this->temp_zone3;
    }

    public function setTempZone3(?int $temp_zone3): self
    {
        $this->temp_zone3 = $temp_zone3;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getChangeLog(): ?string
    {
        return $this->change_log;
    }

    public function setChangeLog(?string $change_log): self
    {
        $this->change_log = $change_log;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getSqfVer(): ?string
    {
        return $this->sqf_ver;
    }

    public function setSqfVer(?string $sqf_ver): self
    {
        $this->sqf_ver = $sqf_ver;

        return $this;
    }

    public function getLastChangeDt()
    {
        return $this->last_change_dt;
    }

    public function setLastChangeDt(?\DateTimeInterface $last_change_dt): self
    {
        $this->last_change_dt = $last_change_dt;

        return $this;
    }

    public function getDriverPhone(): ?string
    {
        return $this->driver_phone;
    }

    public function setDriverPhone(?string $driver_phone): self
    {
        $this->driver_phone = $driver_phone;

        return $this;
    }
}
