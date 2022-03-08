import { of } from 'rxjs';
import { map } from 'rxjs/operators';

of(1, 2, 3)
    .pipe(map(num => num + '!!!'))
    .subscribe(value => console.log(value));
