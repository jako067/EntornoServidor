import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GamesCreate } from './games-create';

describe('GamesCreate', () => {
  let component: GamesCreate;
  let fixture: ComponentFixture<GamesCreate>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GamesCreate],
    }).compileComponents();

    fixture = TestBed.createComponent(GamesCreate);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
