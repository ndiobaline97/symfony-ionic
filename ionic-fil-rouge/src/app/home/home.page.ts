import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  public contact = {
    Name: "Ndioba DIAGNE",
    Email: "ndioba97@gmailcom",
    Tel: "784680254",
    Location: "assets/images/trio.png"
  }

  constructor() {}

}
