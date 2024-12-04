# Advanced Event Manager Plugin

## Description

The **Advanced Event Manager (AEM)** is a custom WordPress plugin designed to manage events, integrate weather data for event locations, and allow event details to be displayed using a simple shortcode. It also provides a custom post type for events and allows event details (like name, date, location) to be added via the WordPress admin panel. The plugin also fetches weather information based on the event location and displays it on the event edit screen.

---

## Features

- **Custom Post Type**: Create and manage events with custom fields (event date, location).
- **Weather Integration**: Automatically fetches and displays the weather based on the event's location.
- **Shortcode Support**: Displays a list of events, including the event's name, date, location, and weather information.
- **Custom Meta Fields**: Manage custom fields like event date and location via the admin interface.
- **Admin Settings Page**: Manage API keys for weather integration through an easy-to-use settings page in the admin panel.

---

## Installation

### 1. **Download the Plugin**
   - Download the `Advanced Event Manager` plugin ZIP file.

### 2. **Install the Plugin**
   - Go to the WordPress Admin Panel.
   - Navigate to **Plugins > Add New**.
   - Click **Upload Plugin** and choose the downloaded ZIP file.
   - Click **Install Now** and then **Activate**.

### 3. **Configure the Weather API Key**
   - After activation, go to **Settings > Event Manager** in the WordPress Admin Panel.
   - Enter your **OpenWeatherMap API key** in the **Weather API Key** field.
   - Save the settings.

---

## Usage

### 1. **Creating an Event**

- Once the plugin is activated, a new post type **Events** will be available in the WordPress admin menu.
- Navigate to **Events > Add New** to create a new event.
- In the event editor, fill in the following details:
   - **Event Title**: The name of your event (e.g., "Annual Conference").
   - **Event Date**: Use the "Event Date" field to select the date of the event.
   - **Event Location**: Use the "Event Location" field to input the location where the event will take place (e.g., "New York").
   - **Weather Information**: Once the location is entered, the plugin will automatically fetch and display the current weather in the event's location.

### 2. **Adding Event Meta Fields**
   - **Event Date**: This field stores the date of the event. It can be used for sorting and displaying events in chronological order.
   - **Event Location**: The location where the event will take place. This is used to fetch weather information from OpenWeatherMap.
   - **Weather Data**: Weather details for the specified event location are fetched via the OpenWeatherMap API.

### 3. **Viewing Events**
   - The list of events can be viewed using the **[event_list]** shortcode. This will display events sorted by date, including their location and weather description.

### 4. **Adding the Shortcode**

You can display events on any page or post by using the following shortcode:

```plaintext
[event_list]
