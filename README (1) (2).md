cubos Aurelio 

Feature-Based Folder Structure

## Folder Structure Purpose
This project uses a *Feature-Based Folder Structure*. 
- /src/components: For reusable UI elements (buttons, inputs).
- /src/features: Where files are grouped by function (e.g., /booking, /inventory).
- /assets: For images and global CSS.

## Component Layering Strategy
We use the *Container-Presentational Pattern*:
- *Containers*: These act as the "brains" that fetch data from the database.
- *Presentational*: These handle the display only, ensuring the UI remains clean.

In this activity, We chose a Feature-Based Folder Structure to keep our project organized and easy to manage. Instead of mixing all files together, we group them by what they do, like /booking or /inventory. This prevents "spaghetti code" and helps us find files quickly when we need to fix bugs or add new features. By keeping things separate, we make sure that changing one part of the system won't accidentally break another.

To make the system even better, we use the Container-Presentational Pattern. This splits our code into two layers: Containers act as the "brains" that handle data and logic from the database, while Presentational components handle the "looks" or the user interface. This separation makes our code easier to reuse and keeps the design clean. Overall, these choices help our system run smoothly and stay organized as it grows.
