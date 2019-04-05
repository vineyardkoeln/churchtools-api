<?php
declare(strict_types=1);

namespace ChurchTools\Api\Tools;

/**
 * Helper functions for calendar stuff
 *
 * @author André Schild
 */
class CalendarTools
{
    /*
     * Remove all calendar entries which are not inside start/end dates
     * It returns a new array with the remaining calendar entries
     *
     * This can/must be used, when you retrieve the entries via
     * RestApi->getCalendarEvents() since this call also returns repeating
     * entries which are outside of the requested range
     *
     */

    public static function filterCalendarentries(array $calendarEntries,
                                                 int $startDate, int $endDate): array
    {
        $retVal = array_filter($calendarEntries,
            function($entry) use ($startDate, $endDate) {
            return $entry->getStartDate()->getTimestamp() >= $startDate && $entry->getStartDate()->getTimestamp()
                <= $endDate;
        });
        return $retVal;
    }

    /**
     * Sort the calendar entries by start date
     *
     * @param array $calendarEntries array with the entries to be sorted
     * @param bool  $sortAscending   default true, sort ascending or descending
     *
     * @return array the sorted array
     */
    public static function sortCalendarentries(array $calendarEntries,
                                               bool $sortAscending = true): array
    {
        usort($calendarEntries,
            function ($a, $b) use($sortAscending): bool {
            if ($sortAscending) {
                return $a->getStartDate()->getTimestamp() > $b->getStartDate()->getTimestamp();
            } else {
                return $a->getStartDate()->getTimestamp() < $b->getStartDate()->getTimestamp();
            }
        });
        return $calendarEntries;
    }
}