<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of BookingStatusType with methods for sorting
 *
 * @author André Schild
 */
class BookingStatusTypes extends CTObject
{
    // List of booking status types types in master data
    private $bookingStatusTypes = [];

    /**
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        $myBookingStatus                            = new BookingStatusType($blockData);
        $this->bookingStatusTypes[$myBookingStatus->getId()] = $myBookingStatus;
    }

    /**
     * Returns the booking status type object associated with this id
     *
     * @param int id of booking status to retrieve
     * 
     * @return ChurchTools\Api\BookingStatusType
     */
    public function getBookingStatusType($bookingStatusTypeID): BookingStatusType
    {
        return $this->bookingStatusTypes[$bookingStatusTypeID];
    }

    /**
     * Get list of visible booking status types ID's, optionally sorted by sortKey
     * 
     * @param boolean should the ID's be sorted according to the sortkey
     * 
     * @return array list of booking status types id's
     */
    public function getBookingStatusTypesIDS($sorted = false): array
    {
        $bookingStatusTypes = [];
        foreach ($this->bookingStatusTypes as $bookingStatusType) {
            $id        = $bookingStatusType->getID();
            $order     = $bookingStatusType->getSortKey();
            $bookingStatusTypes[$id] = $order;
        }
        if ($sorted) {
            asort($bookingStatusTypes);
        }
        return array_keys($bookingStatusTypes);
    }
}