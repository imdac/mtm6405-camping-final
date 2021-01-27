# Camping

## Objective
Create a simple text-based camping game using functions, conditional statements, HTTP variables, and PHP includes.

## Actions
The following action will be performed when the player enters the corresponding command.

### Setting up tent
The player can set up the tent. There is no requirement to set up the tent. 

### Searching for wood
The player can search for wood, which will increase the player's wood inventory **by one**. The player can go searching for wood if:

- The fire has been stopped

### Starting / Stopping a fire
The player can start or stop a fire. The player will start the fire only if:

- The fire has been stopped
- The player has at least 1 piece of wood

The player will stop the fire only if:

- The fire has been started

### Roasting marshmallows
The player can roast marshmallows. The player will roast marshmallows only if:

- The fire has been started
- The player has at least 1 marshmallow 

### Sleeping
The player can sleep. The player will be able to sleep only if: 

- The fire has been stopped
- The tent has been set up

## Requirements
The following requirements must be met to complete the assignment successfully: 

### 1. Clone the Repository
Clone this repository from GitHub and use the provided file to complete the assignment. **Warning: The provided file will throw an error if run as is. The error will be fixed after step 3 is completed.**

### 2. Include `camping.php`
Include `camping.php` inside `index.php`.

### 3. Create Game Data in Session
1. In `camping.php`, start a new session
2. In `camping.php`, create the `createGameData()` function. The function will create a game data array and store it in session and store it in session under the index `camping`. The game data array should contain the following:
    1. The `response` array
    2. The number of `marshmallows`
    3. The number of `wood`
    4. The status of the `tent`
    5. The status of `fire`

### 4. Send commands using the POST Method
In `index.php`, update the form to submit using the `POST` method.

### 5. Check for the `$_POST` array
In `camping.php`, check for the `$_POST` array for a player's command. 

1. If a player has entered a command, check If the command matches an existing function (HINT: Use `function_exists()`). 
    1. If so, execute the function and pass the results to the `updateResponse()` function.
    2. If not, then add a response to the response array in session, using `updateResponse()`, telling the user that the command is not valid.

### 6. Create Game Functions
Each action or command (see above) will require a function. Create the following functions with the requirements:

#### 1. The `tent()` function
The `tent()` function will allow the player to set up the tent. There are no requirements to set up the tent.  

#### 2. The `wood()` function
The `wood()` function will allow the player to search for wood as long as the fire is not going.

#### 3. The `fire()` function
The `fire()` function will allow the player to start or stop the fire and should have the following requirements: 

1. If the `fire()` function is called when the fire is going, it should be turned off the fire. 
2. If the `fire()` function is called when the fire is NOT going AND the player has at least 1 piece of wood, the fire should be turned on. 

#### 4. The `roast()` function
The `roast()` function will allow the player to roast a marshmallow. Each call to the `roast()` function will use **one** marshmallow. The requirements for roasting are as follows:

1. The fire must be going
2. The player must have at least 1 marshmallow

#### 5. The `rest()` function
The `rest()` function will allow the player to sleep. The requirements for sleeping are as follows:

1. The fire must be not going
2. The tent must be set up

