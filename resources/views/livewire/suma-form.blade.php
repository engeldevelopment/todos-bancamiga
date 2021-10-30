<div>
    <input type="text"  wire:model="numberA">
    <input type="text" wire:model="numberB">
    <div>{{ $result }}</div>
    <button wire:click="sum"></button>
</div>
