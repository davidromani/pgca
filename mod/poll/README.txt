Poll plugin for Elgg 1.8
Latest Version: 1.8.4
Released: 2015-06-16
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (C) iionly, (C) Kevin Jardine, (C) John Mellberg and Dr Sanu P Moideen


This plugin allows adding of polls (both site-wide polls and optionally also group-specific polls). The number of choices to vote on is free to choose for each poll. Optionally, a (longer) description can be added to a poll. An admin can also (optionally) make a single poll the site's current featured poll. The widgets included are a "My polls" widget that shows a user's polls on his profile page and/or dashboard, a "Latest community polls" widget for the dashboard (and if the Widget Manager plugin is available also on the index page), a group's polls widget for group profile pages and the "Featured poll" widget showing the site's current featured poll on the dashboard (and if the Widget Manager plugin is available also on the index page). Notification on creation of new polls is optional (admin setting) and the creation of river entries for new polls and voting on polls can also be enabled/disabled in the plugin settings.

The poll plugin has a long history (see below), has been released in various versions by different developers and a few word about the compatibility of this new release of the poll plugin seem necessary. Basically, there exist two classes of the "poll" plugin (or "polls" plugin respectively): most of the versions are based quite closely on the original version of the "poll" plugin by John Mellberg. Each of them is compatible to the other versions of the "poll" plugin regarding existing polls but there is quite a mess regarding compatibilty to Elgg itself (at maximum Elgg 1.7 anyway). The other class consists actually only of the "polls" plugin of Kevin Jardine. The polls plugin of Kevin is a complete re-write, works also on Elgg 1.8 but is not compatible with the other poll plugins.

With this new release I've tried to merge the two classes of the poll(s) plugin again. While it's based on Kevin's polls plugin I've renamed it again to poll plugin, tried to fix the remaining issues and also included an upgrade script for existing polls created with any former version of the poll plugin.



Installation:

1. If you have a previous version of the poll plugin installed, first disable the poll plugin and remove the poll plugin folder of the old version from your mod folder,
2. Copy the poll plugin folder into you mod folder,
3. Enable the Poll plugin in the admin section of your site,
4. Check the Poll plugin settings and adjust the settings according to your preference.



Changelog:

1.8.4:

- Total reset of votes when editing a poll (adding/removing choices or modifying existing choices). Problem was that users who already voted were unable to re-vote after poll choices had been changed. This could have been quite annoying for them if they wanted to change their vote based on the updated choices (a mischievous person would have even been able to switch the choices to contradict the poll results completely!). The only way to make it fair seemed to me to reset the votes to allow everyone a re-vote. Downside is that even correcting a typo in a poll choice text will reset the poll but his is unavoidable unfortunately,
- Fixed bug where poll choices of a group poll got lost when poll was edited by the group admin but the poll is owned by another group member,
- Fixed bug that prevented the description of a poll to be completely removed.

1.8.3:

- Fixed: admins can no longer see who voted for which choice if "Allow open polls" plugin setting is set to "No".

1.8.2:

skipped.

1.8.1:

- Optional time limitation on polls (poll results are still shown afterwards but voting is no longer possible). Time limitation on polls can be enabled/disabled by plugin setting. Thanks to Jerome Bakker for the inspiration to this feature (and some initial code for implementing it, too),
- Optionally make a poll an open poll (it's visible who voted for which poll choice). Thanks to tacid for the inspiration to this feature (and most of the code for implementing it, too),
- Latest comments made on polls in sidebar on "All" and "Mine" poll pages,
- Consistent display of poll creator, poll creation date, number of votes, number of comments and tags in all widgets, the list view and full view,
- Removal of files no longer in use (that's why you should remove the plugin folder of any previous version to get rid of them, too).

1.8.0:

- Some general code cleanup,
- Fix remaining issues of deprecated function usage,
- Fixed widgets (both with and without usage of Widget Manager plugin),
- Fixed notification sending,
- Added (optional) description field,
- Added convert script for existing polls that have the old response data structure of the original poll plugin.



Contributors / History:

The original Elgg 1.x Poll plugin was written by John Mellberg
(http://www.syslogicinc.com) and modified by Team Webgalli (www.webgalli.com)
to work with Elgg 1.5.

Kevin Jardine at Radagast Solutions (kevin@radagast.biz) rewrote the original
code to create the Polls plugin for Elgg 1.6/1.7.

Anirup Dutta removed some deprecated functions to create a preliminary version
to work with Elgg 1.8.

Kevin Jardine rewrote the plugin completely for Elgg 1.8.

Stephen Clay contributed some bug fixes and suggestions.

Jerome Bakker (http://www.coldtrick.com) contributed some missing language
strings, title and breadcrumb fixes and fixes to eliminate PHP
warnings/notifications.
