const observable = Rx.Observable.create(observer => {
    observer.next('hello');
    observer.next('world');
});

observable.subscribe(val => print(val));


