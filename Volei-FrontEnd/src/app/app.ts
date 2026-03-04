import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { TeamsCreate } from './teams-create/teams-create';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, TeamsCreate],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('Volei-FrontEnd');
}
