<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
// Properties
private int $storageCapacity;
private int $initialStorage = 0;

// Construct
public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
{
parent::__construct($colot, $nbSeats);

$this->energy = $energy;
$this->storageCapacity = $storageCapacity;
}

// Getters / Setters
public function getStorageCapacity(): int
{
  return $this->storageCapacity;
}

public function setStorageCapacity(int $storageCapacity): void
{
  $this->storageCapacity = $storageCapacity;
}

public function getInitialStorage(): int
{
  return $this->initialStorage;
}

public function setInitialStorage(int $initialStorage): void
{
  $this->initialStorage = $initialStorage;
}

// Other Methods
private int $totalStored = 0;

public function fill(int $storage)
{
  while($this->initialStorage + $storage <= 100) {
    $storage += 10;
    return $storage . PHP_EOL;
  }
  $this->totalStored = $this->initialStorage + $storage;
  return $this->totalStored;
}

public function isFilled(int $storage): string
{
if ($this->storage )
}
}
