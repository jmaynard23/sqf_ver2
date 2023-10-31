<?php

namespace App\Entity;

use App\Repository\ReceivingTempLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceivingTempLogRepository::class)]
#[ORM\Table(name: 'receiving_log')]
class ReceivingTempLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $check_stamp = null;

    #[ORM\Column(length: 50)]
    private ?string $purchase_order = null;

    #[ORM\Column(length: 3)]
    private ?string $load_type = null;

    #[ORM\Column(length: 255)]
    private ?string $company = null;

    #[ORM\Column(length: 255)]
    private ?string $product = null;

    #[ORM\Column(length: 3)]
    private ?string $temp_type = null;

    #[ORM\Column(nullable: true)]
    private ?int $back = null;

    #[ORM\Column(nullable: true)]
    private ?int $middle = null;

    #[ORM\Column(nullable: true)]
    private ?int $front = null;

    #[ORM\Column(length: 25)]
    private ?string $dock_door = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $user_id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $trailer_light_inspection = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $insp_infestation = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $insp_trailer_condition = null;

    #[ORM\Column(length: 1)]
    private ?string $insp_rate_cleanliness = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $insp_by = null;

    #[ORM\Column]
    private ?int $pallets_received = null;

    #[ORM\Column]
    private ?int $pallets_returned = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $rejected = null;

    #[ORM\Column(length: 255)]
    private ?string $rejected_reason = null;

    #[ORM\Column(length: 15)]
    private ?string $version = null;

    #[ORM\Column(length: 15)]
    private ?string $sqf_ver = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eff_date = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $change_log = null;

    #[ORM\Column(length: 50)]
    private ?string $trailer_plate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    public function getCheckStamp()
    {
        return $this->check_stamp;
    }

    public function setCheckStamp(\DateTimeInterface $check_stamp): self
    {
        $this->check_stamp = $check_stamp;

        return $this;
    }

    public function getPurchaseOrder(): ?string
    {
        return $this->purchase_order;
    }

    public function setPurchaseOrder(string $purchase_order): self
    {
        $this->purchase_order = $purchase_order;

        return $this;
    }

    public function getLoadType(): ?string
    {
        return $this->load_type;
    }

    public function setLoadType(string $load_type): self
    {
        $this->load_type = $load_type;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getTempType(): ?string
    {
        return $this->temp_type;
    }

    public function setTempType(string $temp_type): self
    {
        $this->temp_type = $temp_type;

        return $this;
    }

    public function getBack(): ?int
    {
        return $this->back;
    }

    public function setBack(?int $back): self
    {
        $this->back = $back;

        return $this;
    }

    public function getMiddle(): ?int
    {
        return $this->middle;
    }

    public function setMiddle(?int $middle): self
    {
        $this->middle = $middle;

        return $this;
    }

    public function getFront(): ?int
    {
        return $this->front;
    }

    public function setFront(?int $front): self
    {
        $this->front = $front;

        return $this;
    }

    public function getDockDoor(): ?string
    {
        return $this->dock_door;
    }

    public function setDockDoor(string $dock_door): self
    {
        $this->dock_door = $dock_door;

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

    public function getTrailerLightInspection(): ?int
    {
        return $this->trailer_light_inspection;
    }

    public function setTrailerLightInspection(int $trailer_light_inspection): self
    {
        $this->trailer_light_inspection = $trailer_light_inspection;

        return $this;
    }

    public function getInspInfestation(): ?int
    {
        return $this->insp_infestation;
    }

    public function setInspInfestation(int $insp_infestation): self
    {
        $this->insp_infestation = $insp_infestation;

        return $this;
    }

    public function getInspTrailerCondition(): ?int
    {
        return $this->insp_trailer_condition;
    }

    public function setInspTrailerCondition(int $insp_trailer_condition): self
    {
        $this->insp_trailer_condition = $insp_trailer_condition;

        return $this;
    }

    public function getInspRateCleanliness(): ?string
    {
        return $this->insp_rate_cleanliness;
    }

    public function setInspRateCleanliness(string $insp_rate_cleanliness): self
    {
        $this->insp_rate_cleanliness = $insp_rate_cleanliness;

        return $this;
    }

    public function getInspBy(): ?string
    {
        return $this->insp_by;
    }

    public function setInspBy(?string $insp_by): self
    {
        $this->insp_by = $insp_by;

        return $this;
    }

    public function getPalletsReceived(): ?int
    {
        return $this->pallets_received;
    }

    public function setPalletsReceived(int $pallets_received): self
    {
        $this->pallets_received = $pallets_received;

        return $this;
    }

    public function getPalletsReturned(): ?int
    {
        return $this->pallets_returned;
    }

    public function setPalletsReturned(int $pallets_returned): self
    {
        $this->pallets_returned = $pallets_returned;

        return $this;
    }

    public function getRejected(): ?int
    {
        return $this->rejected;
    }

    public function setRejected(int $rejected): self
    {
        $this->rejected = $rejected;

        return $this;
    }

    public function getRejectedReason(): ?string
    {
        return $this->rejected_reason;
    }

    public function setRejectedReason(string $rejected_reason): self
    {
        $this->rejected_reason = $rejected_reason;

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

    public function setSqfVer(string $sqf_ver): self
    {
        $this->sqf_ver = $sqf_ver;

        return $this;
    }

    public function getEffDate()
    {
        return $this->eff_date;
    }

    public function setEffDate(?\DateTimeInterface $eff_date): self
    {
        $this->eff_date = $eff_date;

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

    public function getTrailerPlate(): ?string
    {
        return $this->trailer_plate;
    }

    public function setTrailerPlate(string $trailer_plate): self
    {
        $this->trailer_plate = $trailer_plate;

        return $this;
    }
}
