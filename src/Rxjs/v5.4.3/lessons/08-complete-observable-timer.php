<!DOCTYPE html>
<html lang="en">
    <?php include_once '../partials/header.html' ?>
<body>

<script src="../js/helper.js"></script>
<script>
    const timer = Rx.Observable.timer(1000);

    timer
        .finally(() => print('All done!'))
        .subscribe();
</script>
</body>
</html>
