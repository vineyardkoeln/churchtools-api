<?php
declare(strict_types=1);

namespace ChurchTools\Api\Tools;

/**
 * Helper functions for booking stuff
 *
 * @author André Schild
 */
class BookingTools
{
    /*
     * Remove all booking entries which are not inside start/end dates
     * It returns a new array with the remaining booking entries
     *
     * This can/must be used, when you retrieve the entries via
     * RestApi->getCalendarEvents() since this call also returns repeating
     * entries which are outside of the requested range
     *
     */

    public static function filterBookingEntries(array $bookingEntries,
                                                 int $startDate, int $endDate,
            bool $includeConfirmed= true, bool $includeWaitingConfirmation= false, 
            bool $includeRejected= false, bool $includeDeleted= false
            ): array
    {
        $retVal = array_filter($bookingEntries,
            function($entry) use ($startDate, $endDate, $includeConfirmed, $includeWaitingConfirmation, $includeRejected, $includeDeleted) {
            return (
                    $includeConfirmed && $entry->isConfirmed() ||
                    $includeWaitingConfirmation && $entry->isWaitingConfirmation() ||
                    $includeRejected && $entry->isRejected() ||
                    $includeDeleted && $entry->isDeleted()
                    )
            &&
                ($entry->getStartDate()->getTimestamp() <= $endDate && 
                 ($entry->getStartDate()->getTimestamp() >= $startDate ||
                 ($entry->getEndDate()->getTimestamp() >= $startDate))) ;
        });
        return $retVal;
    }

    /**
     * Sort the booking entries by start date
     *
     * @param array $bookingEntries array with the entries to be sorted
     * @param bool  $sortAscending   default true, sort ascending or descending
     *
     * @return array the sorted array
     */
    public static function sortBookingEntries(array $bookingEntries,
                                               bool $sortAscending = true): array
    {
        usort($bookingEntries,
            function ($a, $b) use($sortAscending): bool {
            if ($sortAscending) {
                return $a->getStartDate()->getTimestamp() > $b->getStartDate()->getTimestamp();
            } else {
                return $a->getStartDate()->getTimestamp() < $b->getStartDate()->getTimestamp();
            }
        });
        return $bookingEntries;
    }
}