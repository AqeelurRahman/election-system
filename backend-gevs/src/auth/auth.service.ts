// auth.service.ts
import { Injectable } from '@nestjs/common';
import { JwtService } from '@nestjs/jwt';
import { UsersService } from '../users/users.service';
import { User } from '../users/entities/user.entity';

@Injectable()
export class AuthService {
  constructor(
    private readonly userService: UsersService,
    private readonly jwtService: JwtService,
  ) {}

  async validateUser(username: string, password: string): Promise<User | null> {
    const user = await this.userService.findByUsername(username);

    if (user && (await user.comparePassword(password))) {
      return user;
    }

    return null;
  }

  async login(user: User): Promise<{ token: string }> {
    const payload = { username: user.voterId, sub: user.id };
    return {
      token: this.jwtService.sign(payload),
    };
  }
}
