OVERVIEW
================
Reverse Phone queries for all the records relating to a single phone number. 
Reverse Phone search returns the people, locations, and business related to it.

Eclipse version
================
Eclipse Java EE IDE for Web Developers.

Version: Kepler Service Release 2
Build id: 20140224-0627

Jdk version
================
This project is created/tested using jdk1.8.0_05.

Tomcat version
================
Tomcat v7.0

Prerequisites
====================
Eclipse Java EE IDE
jdk version => jdk1.8.0_05
Tomcat v7.0

Running the application
=========================
Import the Eclipse project named 'WhitePagesPhoneLookup'. It is Dynamic Web Project in Eclipse Java EE IDE.

To run the application:
- start the server: click on tab "Servers", right click on the appropriate server and select "Start". If server tab is not opened then open it by clicking on Windows -> Show View -> Servers.
- Explore project "WhitePagesPhoneLookup", right click on "phones_lookup.jsp" under WebContent, select "Run As"->"Run on Server"

A simple web page for "Find by phone" will be displayed.

Create WAR file
=========================
Right click on project i.e. 'WhitePagesPhoneLookup' select "Export"->"WAR file", choose the file name (which will be also the name of the web application) and click on "Finish".

Running with Tomcat
===================
To run the application with Tomcat, a WAR file must first be build. The simplest way to build this WAR file as mentioned in above step.
To deploy the WAR file, start Tomcat, use Tomcat manager to deploy the generated WAR file. Once deployed, the application 
will appear in Tomcat web applications list. Clicking on the application path will direct to the application "phones_lookup.jsp" page.
