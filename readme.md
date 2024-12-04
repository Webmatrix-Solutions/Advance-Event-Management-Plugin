Advanced Event Manager Plugin
Description
The Advanced Event Manager (AEM) is a custom WordPress plugin designed to manage events, integrate weather data for event locations, and allow event details to be displayed using a simple shortcode. It also provides a custom post type for events and allows event details (like name, date, location) to be added via the WordPress admin panel. The plugin also fetches weather information based on the event location and displays it on the event edit screen.

Features
Custom Post Type: Create and manage events with custom fields (event date, location).
Weather Integration: Automatically fetches and displays the weather based on the event's location.
Shortcode Support: Displays a list of events, including the event's name, date, location, and weather information.
Custom Meta Fields: Manage custom fields like event date and location via the admin interface.
Admin Settings Page: Manage API keys for weather integration through an easy-to-use settings page in the admin panel.
Installation
Download the Plugin

Download the Advanced Event Manager plugin ZIP file.
Install the Plugin

Go to the WordPress Admin Panel.
Navigate to Plugins > Add New.
Click Upload Plugin and choose the downloaded ZIP file.
Click Install Now and then Activate.
Configure the Weather API Key

After activation, go to Settings > Event Manager in the WordPress Admin Panel.
Enter your OpenWeatherMap API key in the Weather API Key field.
Save the settings.
Usage

1. Creating an Event
   Once the plugin is activated, a new post type Events will be available in the WordPress admin menu.
   Navigate to Events > Add New to create a new event.
   In the event editor, fill in the following details:
   Event Title: The name of your event (e.g., "Annual Conference").
   Event Date: Use the "Event Date" field to select the date of the event.
   Event Location: Use the "Event Location" field to input the location where the event will take place (e.g., "New York").
   Weather Information: Once the location is entered, the plugin will automatically fetch and display the current weather in the event's location.
2. Adding Event Meta Fields
   Event Date: This field stores the date of the event. It can be used for sorting and displaying events in chronological order.
   Event Location: The location where the event will take place. This is used to fetch weather information from OpenWeatherMap.
   Weather Data: Weather details for the specified event location are fetched via the OpenWeatherMap API.
3. Viewing Events
   The list of events can be viewed using the [event_list] shortcode. This will display events sorted by date, including their location and weather description.
4. Adding the Shortcode
   You can display events on any page or post by using the following shortcode:

plaintext
Copy code
[event_list]
This shortcode will generate a list of upcoming events with the following information:

Event Name
Event Date
Event Location
Current Weather
Example usage in a post or page:

Edit any page or post in WordPress.
Add the shortcode [event_list] where you want the list of events to appear.
The events will automatically be pulled from the event post type and displayed in a list format.

Plugin Settings
API Key Settings
Go to Settings > Event Manager to enter your OpenWeatherMap API key. This API key is required to fetch weather information based on the event's location.
The plugin uses the OpenWeatherMap API to get real-time weather updates for the event location.
Frontend Display of Events
Once the shortcode [event_list] is added to a page or post, the list of events will be displayed with the following details:

Event Name: The title of the event.
Event Date: The date the event is scheduled to occur.
Event Location: The location of the event.
Weather Information: A description of the weather at the event location (fetched from the OpenWeatherMap API).
Admin Panel Event Management
Meta Box
When editing an event in the admin panel, a meta box will appear where you can add:

Event Date: Select the event's date.
Event Location: Enter the location of the event.
Weather Data: The weather for the entered location will be automatically displayed when editing the event.
Custom Post Type (CPT)
The plugin creates a custom post type called Event. You can manage events just like regular posts in WordPress, but with custom fields specifically for the event's date and location.

Event CPT Features:
Title: Event name.
Content: Description or details of the event.
Event Date: Set the date for the event.
Event Location: Set the location of the event.
Weather: Automatically fetches weather information based on location.
Troubleshooting
Weather Data Not Showing:

Ensure that you have entered a valid OpenWeatherMap API key in the Settings > Event Manager page.
Check if the event location is correct and can be found by the weather API.
API Key Not Working:

Make sure you have entered the correct API key.
If the API key is expired or invalid, obtain a new key from OpenWeatherMap.
FAQ
Can I customize the appearance of the event list?
Yes! You can modify the output by editing the aem_event_list_shortcode() function in the includes/shortcode.php file.

How do I add more event fields?
You can add more custom fields by editing the meta box callback function in includes/meta-boxes.php.

License
This plugin is released under the GPLv2 license or later. You can modify and distribute it as per the terms of the license.

Changelog
1.0.0 – Initial Release

Added custom post type for events.
Implemented weather integration via OpenWeatherMap API.
Created admin settings page to store the weather API key.
Added shortcode to display events on any page or post.
