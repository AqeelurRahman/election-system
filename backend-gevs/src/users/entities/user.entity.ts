// user.entity.ts
import {
  Column,
  Entity,
  JoinColumn,
  ManyToOne,
  PrimaryGeneratedColumn,
} from 'typeorm';
import { Constituency } from '../../constituency/entities/constituency.entity';

@Entity()
export class User {
  @PrimaryGeneratedColumn()
  id: number;

  @Column({ unique: true })
  voterId: string; // Assuming it's an email address

  @Column()
  fullName: string;

  @Column({ type: 'date' })
  dateOfBirth: Date;

  @Column()
  password: string;

  @ManyToOne(() => Constituency)
  @JoinColumn({ name: 'constituency_id' })
  constituency: Constituency;

  @Column({ length: 8, unique: true })
  uniqueVoterCode: string;
}
