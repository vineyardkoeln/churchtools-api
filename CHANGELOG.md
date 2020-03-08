Change Log for ChurchTools API
==============================

* 0.5.2
    * FEATURE          Extend ServiceEntry model for API v1

* 0.5.1
    * BUGFIX     #10   Query new CSRF-Token after login and add it to each request

* 0.5.0
    * FEATURE          First working implementation of the new REST Api
    * BUGFIX           GroupMembershipEndDate can be null

* 0.4.5
    * FEATURE     #8   Calendar entries now processes moreInfos and link on entry

* 0.4.4
    * BUGFIX      #7   All day calendar events end now 23:59:59 of last day and not 00:00:00 as returned by ct api

* 0.4.3
    * FEATURE     #6   Add support to retrieve group, group types, group meetings and bookings

* 0.4.2
    * FEATURE     #6   Add support to retrieve resources and resource types

* 0.4.1
    * BUGFIX      #6   Don't filter calendar entries which start before start date

* 0.4.0
    * FEATURE     #5   Basic object model implemented (thanks a lot to @a-schild!)

* 0.3.0
    * FEATURE     #2   Enhance API to also work with self hosted ct installations (thanks to @a-schild!)

* 0.2.0 (2018-11-13)
    * ENHANCEMENT #1   Refactor "getToken" into a static method "getLoginToken" which only needs one login call (thanks to @philippkeller!)

* 0.1.0 (2018-07-19)
    * FEATURE          Add function getMasterData

* 0.0.1 (2018-02-10)
    * FEATURE          Initial version: Basic login functionality and some first API call methods
