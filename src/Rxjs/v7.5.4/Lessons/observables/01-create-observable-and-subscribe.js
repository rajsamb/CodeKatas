import { Observable } from "rxjs";

/**
 * Observable is a Producer of multiple values, "pushing" them to Observers (Consumers)
 *  > Observable can deliver values either synchronously or asynchronously
 *  > Observable can "return" multiple values over time, but function cannot.
 *
 *  For example:
 *
 *      On, Observable you can synchronously return multiple value:
 *      --------------------------------------------------------------
 *      const foo = new Observable(subscriber => {
 *          console.log('Hello');
 *          subscriber.next(42);
 *          subscriber.next(100); // "return" another value
 *          subscriber.next(200); // "return" yet another
 *      });
 *
 *      On, Observable you can asynchronously return multiple value:
 *      --------------------------------------------------------------
 *      const foo = new Observable(subscriber => {
 *          console.log('Hello');
 *          subscriber.next(42);
 *          subscriber.next(100); // "return" another value
 *          subscriber.next(200); // "return" yet another
 *
 *          setTimeout(() => {
 *              subscriber.next(300); // happens asynchronously
 *          }, 1000);
 *      });
 *
 *      On, function you cannot return multiple values like this:
 *      --------------------------------------------------------
 *      function foo() {
 *          console.log('Hello');
 *          return 42;
 *          return 100; // dead code. will never happen
 *      }
 */

// 1. Create Observable
    // That push value 1, 2, 3 immediately (synchronously) when subscribed
    // and after one second push value 4

const observable = new Observable(subscriber => {
    subscriber.next(1);
    subscriber.next(2);
    subscriber.next(3);

    setTimeout(() => {
        subscriber.next(4);
        subscriber.complete();
    }, 1000);
});

// 2. Subscribe to an Observable
    // To Invoke the Observable we need to subscribe to it
    // The process of subscribing to observable is called subscription, and it is ongoing execution

console.log('Just before subscribing to an observable');

// An observer is a  consumer of values delivered by and observable
const observer = {
    next(x) { console.log('Got Value ' + x) },
    error(err) { console.error('Some Exception: ' + err) },
    complete() { console.log('done') }
};

observable.subscribe(observer);

// Shortcut
// observable.subscribe(x =>  console.log('Got Value ' + x))

console.log('Just after subscribe');

