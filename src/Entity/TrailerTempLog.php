<?php

namespace App\Entity;

use App\Repository\TrailerTempLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrailerTempLogRepository::class)]
#[ORM\Table(name: 'trailer_temp_log')]
class TrailerTempLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::BIGINT)]
    private ?string $_id = null;

    #[ORM\Column(length: 255)]
    private ?string $trailer_id = null;

    #[ORM\Column(length: 255)]
    private ?string $route_id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $time_checked = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone1 = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone2 = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $zone3 = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $checked_by = null;

    #[ORM\Column(length: 15)]
    private ?string $version = null;

    #[ORM\Column(length: 15)]
    private ?string $sqf_ver = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $effective_dt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $last_change_dt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $create_stamp = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $change_log = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ship_dt = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comments = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $shipping_log_id = null;

    public function getId(): ?int
    {
        return $this->_id;
    }

    public function setId(string $_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    public function getTrailerId(): ?string
    {
        return $this->trailer_id;
    }

    public function setTrailerId(string $trailer_id): self
    {
        $this->trailer_id = $trailer_id;

        return $this;
    }

    public function getRouteId(): ?string
    {
        return $this->route_id;
    }

    public function setRouteId(string $route_id): self
    {
        $this->route_id = $route_id;

        return $this;
    }

    public function getTimeChecked()
    {
        return $this->time_checked;
    }

    public function setTimeChecked(?\DateTimeInterface $time_checked): self
    {
        $this->time_checked = $time_checked;

        return $this;
    }

    public function getZone1(): ?int
    {
        return $this->zone1;
    }

    public function setZone1(?int $zone1): self
    {
        $this->zone1 = $zone1;

        return $this;
    }

    public function getZone2(): ?int
    {
        return $this->zone2;
    }

    public function setZone2(?int $zone2): self
    {
        $this->zone2 = $zone2;

        return $this;
    }

    public function getZone3(): ?int
    {
        return $this->zone3;
    }

    public function setZone3(?int $zone3): self
    {
        $this->zone3 = $zone3;

        return $this;
    }

    public function getCheckedBy(): ?string
    {
        return $this->checked_by;
    }

    public function setCheckedBy(?string $checked_by): self
    {
        $this->checked_by = $checked_by;

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

    public function getEffectiveDt()
    {
        return $this->effective_dt->format('Y-m-d');
    }

    public function setEffectiveDt(?\DateTimeInterface $effective_dt): self
    {
        $this->effective_dt = $effective_dt;

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

    public function getCreateStamp()
    {
        return $this->create_stamp->format('H:i');
    }

    public function setCreateStamp(\DateTimeInterface $create_stamp): self
    {
        $this->create_stamp = $create_stamp;

        return $this;
    }

    public function getChangelog(): ?string
    {
        return $this->change_log;
    }

    public function setChangelog(?string $change_log): self
    {
        $this->change_log = $change_log;

        return $this;
    }

    public function getShipDt()
    {
        return $this->ship_dt;
    }

    public function setShipDt(?\DateTimeInterface $ship_dt): self
    {
        $this->ship_dt = $ship_dt;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getShippingLogId(): ?string
    {
        return $this->shipping_log_id;
    }

    public function setShippingLogId(string $shipping_log_id): self
    {
        $this->shipping_log_id = $shipping_log_id;

        return $this;
    }
}
