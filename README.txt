================================================================================
Fantasy MLS Helper
Created by Corey Matzat
================================================================================

Project Overview
--------------------------------------------------------------------------------
This project contains the code for a website with information to help players
of the MLS Fantasy game fround at fantasy.mlssoccer.com.




Architecture
--------------------------------------------------------------------------------
This project is divided into two parts, a web server for data collection and
processing, and a second web server to host the actual user-facing website.

My personal setup is through Hosting24. The server is hosted on a VPS. The
website is on a personal hosting profile.




Development Structure
--------------------------------------------------------------------------------
Master branch always contains latest release code. Dev branch contains the
latest functioning code. When ready to update the master branch and create
a new app version, merge dev into master, and then add a tag to master
with the new version number.

All development occurs on branches off of dev, such as webcore. Only merge
these feature branches to dev when they are functional. When ready to merge,
first rebase the feature branch onto dev. Then, and only then, merge that
feature branch into dev. Finally, add a tag to dev with the new version number. 
