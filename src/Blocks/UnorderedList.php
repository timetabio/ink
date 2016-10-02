<?php
namespace Ink\Blocks
{
    class UnorderedList implements BlockInterface
    {
        /**
         * @var array
         */
        private $items = [];

        public function addItem(array $item)
        {
            $this->items[] = $item;
        }

        public function getItems(): array
        {
            return $this->items;
        }
    }
}