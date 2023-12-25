// users.service.ts
import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { User } from './entities/user.entity';

@Injectable()
export class UsersService {
  constructor(
    @InjectRepository(User)
    private readonly userRepository: Repository<User>,
  ) {}

  async findByUsername(voterId: string): Promise<User | undefined> {
    return this.userRepository.findOne({ where: { voterId } });
  }

  async findById(id: any): Promise<User | undefined> {
    return this.userRepository.findOne(id);
  }

  async create(user: User): Promise<User> {
    const newUser = this.userRepository.create(user);
    return this.userRepository.save(newUser);
  }

  // Add other user-related methods as needed
}
