<!DOCTYPE html>
<html lang="en">
<?php include_once '../partials/header.html' ?>
<body>
<h1>Multicast</h1>
<em>It is built on concept of Subject Observable. It is used to broadcast message to multiple subscriber but without any side effect</em>
<hr>
<script src="../js/helper.js"></script>
<script>
    const observable = Rx.Observable.fromEvent(document, 'click');

    const click = observable
                    .do(_ => print('Do one time!'))
                    .do(_ => print('Do another time!'));

    // click.subscribe(c => print(`Sub A: ${c.timeStamp}`))
    // click.subscribe(c => print(`Sub B: ${c.timeStamp}`))

    const subject = click.multicast(() => new Rx.Subject());

    const subA = subject.subscribe(c => print(`Sub A: ${c.timeStamp}`));
    const subB = subject.subscribe(c => print(`Sub B: ${c.timeStamp}`));

    subject.connect();
</script>
</body>
</html>
