<p align="center"><a href="#" ><img src="https://i.ibb.co/KbzvJj4/1-MAnu-Uwghp-P3-X0zoy67-P4m-A.png" width="300"></a></p>  
 <h1 align="center">Laravel | Lumen Rest Api Parctice</h1> 

> ## What is Laravel Lumen !
Redux is a predictable state container for JavaScript apps, and a very valuable tool for organizing application state. It’s a popular library to manage state in React apps, but it can be used just as well with Angular, Vue.js or just plain old vanilla JavaScript.

> # Here is the main steps required in ReduxJs:

<h2>What is Action?</h2>

>> An action is just an object that always contains the type of logic that is going to be executed on the state (a string that we can name it as we want, but the convention asks it to be upper case and snack case) and the payload or data that is coming from the action.

```sh
    const action = {type: "SET_USER_FIRST_NAME", payload: "Alex"}
```
<h2>What is Reducer?</h2>

>> A reducer is a pure function that takes the previous state and an action as arguments and returns a new state.

```sh
function myReducer(previousState, action) => {
  switch(action.type) {
        case 'INCREMENT':
        return state = state + 1;
        case 'DECREMENT':
        return state = state - 1;
        default:
        return state;
    }
}
```