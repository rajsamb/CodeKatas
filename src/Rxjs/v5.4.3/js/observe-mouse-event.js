const clickObservable = Rx.Observable.fromEvent(document, 'click');

clickObservable.subscribe(click => console.log(click));
